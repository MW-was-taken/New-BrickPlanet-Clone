var chatSearch;
var lastSearchChatsHtml;

$(function() {
  var cookieconsent = initCookieConsent();
  cookieconsent.run({
      page_scripts: true,
      languages: {
          'en': {
              consent_modal: {
                  title: 'We value your privacy',
                  description: 'We use cookies for player accounts and analytics.',
                  primary_btn: {
                      text: 'Accept',
                      role: 'accept_all'      // 'accept_selected' or 'accept_all'
                  },
                  secondary_btn: {
                      text: 'Settings',
                      role: 'settings'        // 'settings' or 'accept_necessary'
                  }
              },
              settings_modal: {
                  title: 'Cookie Preferences',
                  save_settings_btn: 'Save settings',
                  accept_all_btn: 'Accept all',
                  blocks: [
                      {
                          title: 'How we use cookies',
                          description: 'BrickPlanet requires necessary cookies for the website to work. We also use cookies for analytics.'
                      }, {
                          title: 'Necessary',
                          description: '',
                          toggle: {
                              value: 'necessary',
                              enabled: true,
                              readonly: true
                          }
                      }, {
                          title: 'Analytics',
                          description: 'We use Google Analytics (your data is anonymized) to help analyze and make improvements to our website.',
                          toggle: {
                              value: 'analytics',
                              enabled: false,
                              readonly: false
                          }
                      }
                  ]
              }
          }
      }
  });

  if ($(window).width() < '1024') {
    $('#dropdown.nav-item').removeClass('toggle-hover');
  }

  // Show dropdown when clicked
  $('#header-btn').on('click', function(e) {
    $('#header-menu').toggleClass('active');
    $('.nav-btn').toggleClass('active');
  });

  // Hide menu after clicking menu item
  $('.dropdown-menu li').on('click', function(e) {
     $('#header-menu').removeClass('active');
     $('.nav-btn').removeClass('active');
  });

  $(window).on('resize', function() {
    var width = $(this).width();
    if (width >= 1024) {
      $('.has-sub').addClass('toggle-hover');
      $('.has-sub').removeClass('active');
      $('.has-sub').children('.dropdown-menu').removeClass('dropdown-shown'); // Hide all other dropdown menus
    }
  });

  $('.has-sub').on('click', function(e) { // Get all dropdown menu toggles
    if (width >= 1024) {
      $('.dropdown-menu').not($(this).children('.dropdown-menu')).removeClass('dropdown-shown'); // Hide all other dropdown menus
      $('.has-sub').not($(this)).removeClass('active'); // Remove the active selector from the other dropdown toggles
      $(this).children('.dropdown-menu').toggleClass('dropdown-shown'); // Show/hide the dropdown menu associated with the toggle being clicked
      $(this).toggleClass('active'); // Toggle the active selector on the nav-item
    }
  });

  $('.chat-sub a').not('ul.dropdown-menu').on('click', function(e) {
    $(this).next('.dropdown-menu').toggleClass('dropdown-shown');
    $(this).parent().toggleClass('active'); // Toggle the active selector on the nav-item
  });
});

function chk_scroll(e) {
  var elem = $(e.currentTarget);
  if (elem[0].scrollHeight - elem.scrollTop() == elem.outerHeight()) {
    scrolled = false;
  } else {
    scrolled = true;
  }
}

function playGameByType(gameId, loadType, serverId = '') {

	$.get('/game-api/generate-game-auth-token/' + gameId + '/' + loadType + '?serverId='+serverId, function(res, status) {
		var token = res.token;
    window.protocolCheck('brickplanet://' + loadType + '_' + token, function() {
      $("#downloadModal").modal('show');
    },
    function() {
      console.log("BrickPlanet launched");
    }, 500);
	});
}

function setScroll(element) {
  element.scrollTop = element.scrollHeight;
}

function scrollToTop(element) {
  element.scrollTop = 0;
}

function chatLoadingIndicator() {
  $("#chats").toggle();
  $("#chat-loading").toggle();
}

function unreadChats() {
  $.get('/messages/unread', function(data, status) {
    if (status != 'success') return;

    if (data && data > 0) {
      $("#unread-messages").show();
    } else {
      $("#unread-messages").hide();
    }
  });
}

function searchChats(page, input, is_auto_refresh) {
  if (!page) page = 1;
  if (!is_auto_refresh) {
    chatLoadingIndicator();
    $("#chats-goback").css('display', 'none');
    $(".load-more-chats").css('display', 'none');
    $("#chat-messages").css('display', 'none');
  }
  var searchChatsInput = $("#search-chats-input");
  var value = searchChatsInput.val() != null ? searchChatsInput.val() : null;
  chatSearch = value;

  $.get('/messages/all?page=' + page, function(data, status) {
    if (status != 'success') return;

    if (!is_auto_refresh) {
      chatLoadingIndicator();
      $("#from-chats").css('display', 'block');
    }

    if (data != lastSearchChatsHtml) {
      $("#from-chats").html(data);
      $("#from-chats .timeago").timeago();
    }
    lastSearchChatsHtml = data;

    if (page == 1) {
      scrollToTop(document.getElementById("from-chats"));
    } else if (page > 1) {
      setScroll(document.getElementById("from-chats"));
    }
    unreadChats();
  });
}

function openChat(id) {
  $("#from-chats").css('display', 'none');
  chatLoadingIndicator();
  $.get('/messages/dm/' + id, function(data, status) {
    if (status != 'success') return;

    chatLoadingIndicator();
    $("#chat-messages").html(data);
    $("#chat-messages").css('display', 'block');
    $("#chats-goback").css('display', 'inline-block');
    setScroll(document.getElementById("chat-messages-inner"));
  });
}

const number_format = (x) => {
  return Number(x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")).toFixed(2);
}

function closeModals()
{
  const modals = document.querySelectorAll('.modal-overlay');
  for (const modal of modals) {
      modal.click();
  }
}

$("#mobile-dropdown").click(function() {
  $("nav.sidebar").toggleClass("show");
});

//

var searchQuery;

searchQuery = $("input#searchDropdown").val();
setSearchBtns(searchQuery);

function setSearchBtns(newVal) {
  searchQuery = newVal;
  $("#searchGamesBtn span").text(searchQuery);
  $("#searchPlayersBtn span").text(searchQuery);
  $("#searchShopBtn span").text(searchQuery);
  $("#searchGuildsBtn span").text(searchQuery);
}

$("input#searchDropdown").on("input", function() {
  searchQuery = $(this).val();
  $("#searchGamesBtn span").text(searchQuery);
  $("#searchPlayersBtn span").text(searchQuery);
  $("#searchShopBtn span").text(searchQuery);
  $("#searchGuildsBtn span").text(searchQuery);
});
