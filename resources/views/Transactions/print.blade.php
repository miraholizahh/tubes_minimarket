<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <h1 class="text-center">Transaction</h1>
        <br/>
        <table id="table-data" class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL_TRANSAKSI</th>
                    <th>PRODUK ID</th>
                    <th>JUMLAH</th>
                    <th>TOTAL HARGA</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1; @endphp
                @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $transaction->tanggal_transaksi }}</td>
                    <td>{{ $transaction->produk_id }}</td>
                    <td>{{ $transaction->jumlah }}</td>
                    <td>{{ $transaction->total_harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>