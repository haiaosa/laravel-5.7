<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Hướng dẫn setup

1. git clone https://github.com/haiaosa/laradock.git
2. git clone https://github.com/haiaosa/truyen1vs3.git
3. chay lenh
	docker-compose up -d nginx mysql
trong thu muc laradock

4. chay lenh
	composer install		( ngoai win7 cho nhanh)

5. chay lenh
	docker-compose exec mysql bash   	( Docker Quickstart Terminal - window 1)
	mysql -uroot -proot;
	create database truyen1vs3;

6. chay lenh
	docker-compose exec --user=laradock workspace bash   	( Docker Quickstart Terminal -window 2 )
trong thu muc laradock

7. chay lenh
	php artisan migrate
trong Workspace container		( Docker Quickstart Terminal - window2 )

## Về project Truyện - 1vs3

Project này thì về cơ bản ko có gì đặc biệt, tuy nhiên vì là project đầu tay nên t muốn :

1. Phần code PHP phải đc tổ chức mạch lạc với 
	- *Repository* ( sử dụng để connect DB - Eloquen hoặc Redis...)
	- Controller thì tạo 1 *abtract class cho CRUD* tránh viết lại code
	- Còn 1 đống thứ như : Push, Email, Event - Listener, Job đang muốn thử mà chưa kịp

Ba thằng ở trên là đã giải quyết đc hầu hết vấn đề con Truyện - 1vs3 này rồi. 

Thêm vấn đề nữa là đang ko biết thực tế nếu mình lưu truyện vào server thì lưu kiểu gì, nó là vấn đề của image, search sau.

Một đống design pattern như: Repository......muốn áp dụng vào tối đa nè. Rồi OOP hiểu dc rồi, còn mấy hàm *get,set* đang muốn mò đến thì cũng chưa kịp.

2. Phần Blade thì đang muốn tùy biến được Bulma 1 cách thoải mái, kèm theo đó là sử dụng SASS,SCSS, Vue luôn để cho nó full control mà chưa kịp.
	- Mẹ nó mới biết đc thêm thg TailWind chưa kịp thử, hix.
	- Một đống thứ cần phải lưu ý như : *flex, selector, color:inherit*

3. Phần Eloquen DB, đợt này sẽ dùng DB custom, tức là tiếng việt ko dấu để mình thoải mái khi đọc code mà cũng ko kịp. Và tất cả các mọi thứ cũng viết tiếng việt ko dấu luôn cho nó thoải mái. Project riêng mà, sao phải xoắn.
	- DM, đặc biệt cái phần *conversion* này, thực sự là rất khoai vì nó là sự khác biệt ngôn ngữ, làm loz j nó cũng thêm S hoặc ko có S đằng sau, để nhớ và thuần thục đc bọn này cũng mất kha khá thời gian, tuy nhiên t đã để ý đến nó và đang rất muốn xong xuôi mấy việc kia đi để quay lại tập chung giải quyết việc quan trọng này thì lại éo còn cơ hội, đời thật là vl ở chính cái chỗ này. Vài năm nữa đọc lại, lại éo biết quy ước này nó là chỗ nào đâu, khắm vãi.

	- Nói gì thì nói, nếu mà đc làm cái project này hoàn thành theo đúng ý, thì mọi thứ nó cũng rõ ràng hơn, lúc đó tạm stop cũng éo bị quên nhiều, nhưng thời điểm này mà stop, thì bốc cmn cứt ăn vã rồi !

## Về các tool đã biết và đang dùng cần lưu ý sau:

1.  Máy bàn ở nhà đã cài sẵn Docker rồi nên cứ docker mà dùng ( nếu cài lại win thì dùng Laragon)
	- Cách dùng thì *git clone https://github.com/haiaosa/laradock.git*
	- Laradock này đã cấu hình 3 cái domain rồi: *truyen1vs3.conf, laravel-5.7.conf, refactoring-laravel-5.4.conf*  cần tạo mới thì zô nginx mà copy ,edit thôi.
2. Ở ngoài hàng net thì dùng laragon luôn
	- *git clone https://github.com/haiaosa/truyen1vs3.git* sau đó copy .env.hangnet
		+ Bật server lên, tạo db tên: truyen1vs3
		+ *composer install*
		+ *npm install*
		+ *php artisan migrate*
		+ *php artisan db:seed*, riêng phần seed này cũng muốn sửa lại sử dụng each() mà chưa kịp
		+ *npm run watch* ( rồi ngồi ngắm project :D )
	- Bộ tải ngoài hàng net như sau: ***laragon, git, composer, node, sublime-text-v6.***



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
