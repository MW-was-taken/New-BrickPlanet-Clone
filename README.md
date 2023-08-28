# New BrickPlanet Clone 2023 (LRC "Reskin")

## Table of Contents
- [Introduction](#Inroduction)
- [Usage](#Usage)
- [Setup](#Setup)
- [Credits](#Credits)
- [License](#License)

## Introduction

Thanks for using - and hopefully enjoying this Open Source Repo, a lot of hours have been put into this and are being put into this at the time of writing this.

This source is a "Reskin" of FoxxoSnoot's LRC (Laravel Roblox Clone) - with some extra added features, you can check out his repo here - [https://github.com/FoxxoSnoot/laravel-roblox-clone](https://github.com/FoxxoSnoot/laravel-roblox-clone).

## Usage

This can be used for a BrickPlanet clone, although I can't guarantee that this always will be used or you can always use this source as someone from BrickPlanet especially Isaac may DMCA this Repo or your site, which you have to obey by, please do not remove the "DMCA" section from the footer or the "Credits"

If you don't know Laravel the backend of the site would be found in ```/app/Http/``` and all frontend will be found in ```/resources/views/``` all logos, css, js ETC is found in ```/public/```

## Setup

This would be a simple Laravel setup, if you don't know how to do this I suggest [this tutorial](https://www.rosehosting.com/blog/how-to-install-laravel-on-ubuntu-22-04/)

Once you are done with that do these steps

1. Go into .env and update the sitename, links and everything
2. Go into ```/var/www/html``` and run ```composer update```
3. Then run ```composer installl```
4. Run ```php artisan key:generate```, then run ```php artisan migrate```
5. Go into ```config/site.php``` and update all the links to your domain.

Done!

## Credits

FoxxoSnoot: Original LRC code, which makes this possible.  
Saumodunn: Helping with a few bits here and there.  
BrickPlanet: Their frontend (Obviously).  
Eifo: Helped me optimize my code when I asked, or helped me with the best way to do things.  
Me: Made the reskin as well as a few backend changes here and there, and added things.

## License

Upon using this source you agree to this: You can not remove the credits or the DMCA tab on the footer, you can not modify the DMCA page in any way, and you can not remove any of the credits, but you can add, if you break these terms you can be taken down.

