<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kalkulator</title>
</head>
<style type="text/css">
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body {
        font-family: consolas;
	}
	input {
		outline: 0;
		/*border: 1px solid rgba(0,0,0, 0.5);*/
		border: 0;
		background-color: rgba(0, 0, 0, 0.4);
		color: #fff;
		width: 100%;
		border-radius: 10px;
		height: 55px;
	}
    nav {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 60px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        /* background-color: red; */
    }
    nav ul li {
        list-style: none;
        padding: 10px;
        background-color: royalblue;
        border-radius: 10px;
    }
    nav ul li a {
        text-decoration: none;
        font-size: 17px;
        color: #f8f8f8;
    }
    nav h3 {
        color: #555;
    }
	.kalkulator {
		/*border: 2px solid #222;*/
        margin: auto;
        margin-top: 40px;
        width: 45%;
		padding: 20px;
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		text-align: center;
		gap: 12px;
		box-shadow: -3px -3px 15px rgba(0, 0, 0, 0.06),	
					0 0 20px rgba(0,0,0, 0.2);
		border-radius: 10px;
	}
	.text {
		grid-column: 1/5;
		grid-row: 1/2;
	}
	.item {
		padding: 20px;
		border-radius: 10px;
		background-color: #ddd;
		cursor: pointer;
		transition: .1s;
		box-shadow: 0 0 3px rgba(0, 0, 0, 0.7);
		font-family: consolas;
		/*font-weight: bold;*/
	}
	.item:hover {
		transform: scale(1.1);
	}
	.i1 {
		background-color: salmon;
		color: #fff;
		grid-column: 1/3;
		box-shadow: 0 0 3px salmon;
		grid-row: 2/3;
	}
	.i4 {
		grid-column: 4/5;
		grid-row: 4/5;
	}
	.i5 {
		grid-column: 4/5;
		grid-row: 3/4;
	}
	.i6 {
		grid-column: 4/5;
		grid-row: 5/7;
		background-color: royalblue;
		color: #fff;
	}
	.i16 {
		grid-column: 1/3;
		grid-row: 6/7;
	}
</style>
<body>
    <nav>
        <ul>
            <li><a href="/user">kembali</a></li>
        </ul>
        <h3 class="logo">silahkan gunakan kalkulator jika perlu</h3>
    </nav>

    <div class="content">
        <form class="kalkulator">
            <input class="text" type="text" name="text">
            <div class="item i1">AC</div>
            <div class="item">/</div>
            <div class="item">X</div>
            <div class="item i4">-</div>
            <div class="item i5">+</div>
            <div class="item i6">=</div>
            <div class="item">7</div>
            <div class="item">8</div>
            <div class="item">9</div>
            <div class="item">4</div>
            <div class="item">5</div>
            <div class="item">6</div>
            <div class="item">1</div>
            <div class="item">2</div>
            <div class="item">3</div>
            <div class="item i16">0</div>
            <div class="item">.</div>
        </form>
    </div>
	

	<script type="text/javascript">
		const induk = document.querySelector('.kalkulator');
		function klik(){
			alert('kalkulator belum bisa bekerja, sabar ya!. nanti dilanjutin');
		}
		induk.onclick = klik;
	</script>
</body>
</html>