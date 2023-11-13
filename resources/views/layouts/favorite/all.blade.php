@extends('layouts.main')

@section('container')
    <div class="container">
        <table class="table ">
            <thead class="bg-gray-700">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Episode</th>
                    <th class="text-center">Realise Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                @foreach($favorite as $donghua)
                    <tr >
                        <td class="text-center"><?= $no++ ?></td>
                        <td>
                            <img src="{{ $donghua['image'] }}" alt="Donghua Image" class="mx-auto" width="70" height="120">
                        </td>
                        <td class="text-center">{{ $donghua['title'] }}</td>
                        <td class="text-center">{{ $donghua['episode'] }}</td>
                        <td class="text-center">{{ $donghua['release_date'] }}</td>
                        <td class="text-center">
                            <a href="/layouts.favorite.detail{{ $donghua ->id }}"><button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700"> <ion-icon name="information-circle-outline"></ion-icon> </button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

