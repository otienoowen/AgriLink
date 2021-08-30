Hello {{$email_data['name']}},
<br><br>
Your order has been confirmed!
<br>
Please view your order details below
<br><br>
<table style="width: 600px; text-align:right">
<thead>
    <tr>
        <th>Product Image<th>
        <th>Name<th>
        <th>Quantity<th>
        <th>Weight<th>
        <th>Price<th>
    </tr>
</thead>

<tbody>
    @foreach($product as $item)
    <tr>
        <td>Product Image<td>
        <td>{{ $item ['item']['name'] }<td>
        <td>{{ $item['qty'] }}<td>
        <td>{{ $item ['item']['weight'] }}<td>
        <td>Ksh {{ $item ['item']['price']*$item['qty'] }<td>
    </tr>

    @endforeach

    <tr>
        <td colspan="3"><td>
        <td style="font-size:16; font-width:bold">Total: Ksh {{ $totalPrice }}<td>
    </tr>
</tbody>
</table>

<br><br>
Thank you!
<br>
AgriLink