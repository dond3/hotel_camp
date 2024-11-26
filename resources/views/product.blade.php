<x-layout>
    Hello site
    相馬トランジスタ
    @foreach ($records as $record)
    <tr>
        <td>{{$record->product_name}}</td>
        <td>{{$record->tax_include_price}}</td>
        <td><img src="{{$record->M_products_view->image_url}}" width="300" height="300"></td>
        <td>{{$record->tax_include_price}}</td>
        <td>{{$record->size_info}}</td>
        <td>{{$record->country_of_notice}}</td>
        <td>{{$record->estimated_shipping_days}}</td>
        <td>{{$record->tax_include_price}}</td>
        <td>{{$record->specifications}}</td>
    </tr>
    @endforeach
</x-layout>
