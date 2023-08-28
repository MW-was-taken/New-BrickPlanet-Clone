@extends('layouts.default', [
    'title' => 'List Of Achievementss',
])
@section('content')
    <main class="wrapper">
        <main class="container">
            <div class="mb-5" style="margin:0 auto;text-align:center;">
                <div class="u-text-center">
                </div>
            </div>
            </div>
            <div class="text-2xl fw-semibold mb-3">All Achievements</div>
            <div class="text-xl fw-semibold mb-1">General Achievements (14)</div>
            <div class="row gy-4 mb-4">
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/administrator.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Admin
                                    <div class="text-xs text-muted fw-normal">
                                        @php
                                            $adminBadgeCount = DB::table('user_badges')
                                                ->where('badge_id', 1)
                                                ->count();
                                        @endphp
                                        {{ $adminBadgeCount }} users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement if they be worthy, shall possess the greatest
                                    power. Administrators are members of Brick Planet Administrator team who oversee the
                                    website and spend countless hours to make sure its a safe environment for the community.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/moderator.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Moderator
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement are part of the Brick Planet moderation team, they
                                    work countless hours, day in and day out to keep bad content from appearing on Brick
                                    Planet and to make sure the community is following the terms of service.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/astro.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Astro
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement have a Astro Membership. Thanks for all that you do
                                    to support Brick Planet! To view details about this special package or other account
                                    upgrades, visit our upgrade page.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/astro-plus.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Astro Plus
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement have a Astro Plus Membership and are superior.
                                    Thanks for all that you do to support Brick Planet! To view details about this special
                                    package or other account upgrades, visit our upgrade page.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/friendly-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Friendly
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement have made 25-100 friends or more. Your on your way
                                    to making yourself some awesome friends to create memories with!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/fashion-designer-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Fashion Designer
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement have made 25-100 pieces of clothing on the Brick
                                    Planet Shop. You are on your way to creating some awesome creations for the community
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/game-architect-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Game Architect
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement have obtained 1,000-1,000,000 game visits. You're
                                    on your way to becoming a known player of our community.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/collectible-trader-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Collectible Trader
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement have made 25-100 trades across Brick Planet. You're
                                    starting to learn the proper ways of trading!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/item-hoarder-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Hoarder
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement own at least 50-500 items across BrickPlanet.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/guild-leader-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Guild Leader
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Awarded to players when they reach 250-1,000 members in their guild.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/contributor.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Contributor
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Players who possess this achievement are known by administrators for their helpfulness
                                    in the community. Thanks for all that you have done to support Brick Planet. You are the
                                    beating heart and soul of our community.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/established-member-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Established Member
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Earned once your account is 1-4 years old.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/planetarian-knight-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Planetarian Knight
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Earned by getting 100-1,000 kills.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/sacrificed-i.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Sacrificed
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Earned once you die 50 to 500 times.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-xl fw-semibold mb-1">Event Achievements (2)</div>
            <div class="row gy-4 mb-4">
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/2021-brickmas-sweater-contest.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    2021 Brick-Mas Ugly Sweater Contest
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Earned by participating in the 2021 Brick-Mas Ugly Sweater Contest.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 card card-body">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-2">
                                <img src="{{ env('APP_LINK') }}/cdn/achievements/showcase-winner.png">
                            </div>
                            <div class="col-md-10">
                                <div class="text-2xl fw-semibold mb-2">
                                    Showcase Winner
                                    <div class="text-xs text-muted fw-normal">
                                        0 users possess this achievement<span
                                            class="text-muted mx-2 text-xs align-middle">
                                        </span></div>
                                </div>
                                <div class="text-sm text-muted">
                                    Handed out to those who are featured in a weekly showcase.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection