@extends('layouts.main')

@section('container')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Episode</th>
                    <th class="text-center">Realise Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;?>
                @foreach($ongoing as $ongoings)
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td class="text-center">{{ $ongoings['title'] }}</td>
                        <td class="text-center">{{ $ongoings['episode'] }}</td>
                        <td class="text-center">{{ $ongoings['release_date'] }}</td>
                        <td class="text-center" >
                            <a href="/layouts.ongoing.detail{{ $ongoings ->id }}"><button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700"> <ion-icon name="information-circle-outline"></ion-icon> </button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

