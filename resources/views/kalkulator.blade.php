
@extends('bahan.app-stisla')

@section('content')

<style type="text/css">
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body {
	}
	.content {
		width: 100%;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.kalku {
		position: relative;
		display: grid;
		width: 85%;
		gap: 10px;
		padding: 20px;
		box-shadow: -3px 3px 10px rgba(0,0,0,0.3);
		border-radius: 10px;
		margin-bottom: 10rem;
	}
	.kalku .value {
		grid-column: span 4;
		height: 100px;
		text-align: right;
		border: 1px solid rgba(0,0,0,0.05);
		outline: none;
		padding: 10px;
		font-size: 18px;
		border-radius: 10px;
		background-color: #ddd;
	}
	.kalku span {
		display: grid;
		width: 100%;
		height: 60px;
		color: #333;
		background-color: ;
		place-items: center;
		box-shadow: 0 0 10px rgba(0,0,0,0.3);
		cursor: pointer;
		border-radius: 10px;
	}
	.kalku span:active {
		background: #74ff3b;
		color: #111;
	}
	.kalku span.clear {
		width: 1fr;
		background: salmon;
		grid-column: span 2;
		color: #fff;
	}
	.kalku span.tambah {
		grid-column: 4/5;
		grid-row: 4/6;
		height: 100%;

	}
	.kalku span.hasil {
		color: #fff;
		background-color: royalblue;
	}

</style>
        <div class="col-lg-12">
            <div class="card card-sm">
                <div class="card-header">
                    <h4 class="card-title">Kalkulator</h4>
                </div>               
                <div class="card-body">
				
					<div class="content">
						<form class="kalku" name="kalk">
							<input type="text" class="value" name="txt" readonly="">
							<span class="num clear" onclick="document.kalk.txt.value =''">c</span>
							<span class="num" onclick="document.kalk.txt.value +='/'">/</span>
							<span class="num" onclick="document.kalk.txt.value +='*'">*</span>
							<span class="num" onclick="document.kalk.txt.value +='7'">7</span>
							<span class="num" onclick="document.kalk.txt.value +='8'">8</span>
							<span class="num" onclick="document.kalk.txt.value +='9'">9</span>
							<span class="num" onclick="document.kalk.txt.value +='-'">-</span>
							<span class="num" onclick="document.kalk.txt.value +='4'">4</span>
							<span class="num" onclick="document.kalk.txt.value +='5'">5</span>
							<span class="num" onclick="document.kalk.txt.value +='6'">6</span>
							<span class="num tambah" onclick="document.kalk.txt.value +='+'">+</span>
							<span class="num" onclick="document.kalk.txt.value +='3'">3</span>
							<span class="num" onclick="document.kalk.txt.value +='2'">2</span>
							<span class="num" onclick="document.kalk.txt.value +='1'">1</span>
							<span class="num" onclick="document.kalk.txt.value +='0'">0</span>
							<span class="num" onclick="document.kalk.txt.value +='00'">00</span>
							<span class="num" onclick="document.kalk.txt.value +='.'">.</span>
							<span class="num hasil" onclick="document.kalk.txt.value= eval(kalk.txt.value)">=</span>
						</form>
					</div>
				</div>
            </div>
        </div>
    <!-- Main content -->
    

        <!-- /.content -->
@endsection
