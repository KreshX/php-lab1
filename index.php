<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.header__wrapper {
    		display: flex;
    		max-width: 1440px;
    		column-gap: 273px;
			margin: 0 auto;

		}

		.header__heading{
			font-size: 32px;
			color: black;
		}

		img {
			width: 153px;
		}

		.main__content {
			max-width: 1440px;
			margin: 0 auto;
		}

		p {
			text-align: center;
			font-size: 22px;
		}

		footer {
			max-width: 1440px;
			margin: 0 auto;\
		}

		.main__content_text {
			transition-duration: 0.7s;
		}

		.main__content_text:hover {
			color: pink;
		}

	</style>
	<title>Lab1</title>
</head>
<body>
	<header>
		<div class="header__wrapper">
			<img src="logo.png" alt="#" class="header__logo">
			<p class="header__heading">Лабараторная работа №1 "Hello, World!"</p>
		</div>	
	</header>
    <?php echo "
        <main>
            <div class='main__content'>
                <p class='main__content_text'>Hello, World!</p>
            </div>
        </main>    
    "
    ?>  
	<footer>
		<p>Крошкин Егор Максимович 211-321</p>
	</footer>
</body>
</html>