<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NLX44JS');</script>
	<!-- End Google Tag Manager -->
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="copyright" content="RSDCR S.A.">
    <meta name="description" content="Página destinada a la identificación de los números de teléfono que suelen ser molestos para los usuarios">
    <meta name="keywords" content="buscador,rápido,seguro,teléfono,quién llama,costa rica">
    <meta name="robots" content="index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="yXQLRn_oydRlAy2cfXXXaPj6Bd82BGlXNUwkzPrmP3k" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/styles.css">

	<title>Quién putas llama???</title>
	<style>
		h1 {
            margin-top: 30px;
			text-align: center;
		}
        input[type=number] {
            margin: 5px 0 20px;
            padding: 10px 0 10px 80px;
            max-width: 280px;
            font-size: 36px;
            text-align:left;
            -moz-appearance:textfield;
            background-repeat: no-repeat;
            background-image: url('/images/phone.png');
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
        }
	</style>
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65344729-2"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-65344729-2');
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLX44JS"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="container">
	<form action="" method="get">
		<div class="row">
			<div class="col-lg">
				<h1>Quién putas llama?</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg text-center">
				<label for="search">Número telefónico a buscar: </label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg text-center">
				<input class="input-lg" type="number" required="required" name="search" id="search" value="<?php echo $this->input->get('search');?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg text-center">
                <input class="btn btn-info" type="submit" value="Buscar">
				<a class="btn btn-info" href="/">Limpiar</a>
			</div>
		</div>
	</form>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg text-center">
			<hr>
		<?php if ($this->input->get('search')): ?>
			<h3>Resultado</h3>
			<?php if (count($result) > 0):?>
				<p><?php echo $result[0]->description; ?></p>
			<?php else:?>
				<p>Número no registrado</p>
			<?php endif;?>
		<?php endif;?>
		</div>
	</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>