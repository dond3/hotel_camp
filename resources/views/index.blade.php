<x-layout>


    Hello site


    @foreach ($records as $record)
    <tr>
        <a href="{{ route('products', ['id' => $record->id])}}">
            <td>{{$record->product_name}}</td>
            <td>{{$record->tax_include_price}}</td>
            <td><img src="{{$record->M_products_view->image_url}}" width="300" height="300"></td>
        </a>
    </tr>
    @endforeach

</x-layout>
