@extends('layouts.master')

@section('title')
Chi tiết Liên hệ - {{ $contact['name'] }}
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Chi tiết Liên hệ - {{ $contact['name'] }}</h1>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped" style="font-size: 17px">
                    <thead>
                        <tr>
                            <th>Trường</th>
                            <th>Giá trị</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contact as $field => $value)
                        <td>{{ $field }}</td>
                            <td>
                                @if ($field === 'img_thumbnail')
                                <img src="{{ asset($value) }}" alt="category Image" style="max-width: 100px;">
                                @else
                                {{ $value }}
                                @endif
                            </td>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection