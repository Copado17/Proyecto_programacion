<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Weirdo Comics!</h1>
	<h2> Reporte de Ventas por {{$reporte->tipoReporte}} de {{$reporte->defReporte}}</h2>

    <table>
        <tr>
          <th>#</th>
          <th>Fecha Venta</th>
          <th>Producto</th>
          <th>Nombre Vendedor</th>
          <th>Nombre Cliente</th>
          <th>Total</th>
        </tr>
        @foreach ($datosReporte as $dato)
        <tr>
            <td>{{$dato->id_venta}}</td>
            <td>{{$dato->fecha_venta}}</td>
            <td>{{$dato->nombre_vendedor}}</td>
            <td>{{$dato->nombre_cliente}}</td>
            <td>{{$dato->total_venta}}</td>
        </tr>
        
        @endforeach
      </table>
          
</body>
</html>

{{-- 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="css/estilos.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
            .brand-logo {
  text-shadow:
      -5px 0px 0px black,
      5px 0px 0px black,
      0px -5px 0px black,
      0px 5px 0px black;
  color: white;
  font-family: 'Permanent Marker', cursive;

}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
                                    <p class="brand-logo">Weirdo Comics!</p>
								</td>

								<td>
									Factura #: {{$responceVentas->id_venta}}<br />
									Venta realizada por: {{$responceVentas->nombre_vendedor}}<br />
									Fecha de Venta: {{$responceVentas->fecha_venta}}
								
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Carretera Estatal 420 S/N<br />
									El Rosario<br />
									76240 Santiago de Querétaro, Qro.
								</td>

								<td>
									Weirdo Comics ©<br />
									Ana H y Pedro C<br />
									weirdo.ofical@weirdocomics.com
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Producto</td>
					<td>Categoria</td>
					<td>Precio</td>
					<td>Cantidad</td>
					<td>Total</td>
				</tr>

                @foreach ($infoVentaInd as $dato)


				<tr class="item">
					<td>{{$dato->nombre_producto_individual}}</td>
					<td>{{$dato->tipo_venta_individual}}</td>
                    <td>{{($dato->total_venta_individual)/($dato->cantidad_venta_individual)}}</td>
					<td>{{$dato->cantidad_venta_individual}}</td>
					<td>{{$dato->total_venta_individual}}</td>
				</tr>
                @endforeach

				<tr class="total">
					<td></td>
					<td></td>
					<td></td>
					<td>Total</td>

					<td>{{$responceVentas->total_venta}}</td>
				</tr>
			</table>
		</div>
	</body>
</html> --}}
