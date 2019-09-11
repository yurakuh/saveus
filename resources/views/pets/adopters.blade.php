@extends('layouts.app')

@section('content')
<section class="section--padding2 bgcolor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="modules__content">
                            <div class="withdraw_module withdraw_history">
                                <div class="withdraw_table_header">
                                   
                                    <h3>Запросы на пристройство </h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table withdraw__table">
                                        <thead>
                                            <tr>
                                                <th>Дата</th>
                                               
                                                 <th>Подопечный</th>
                                                <th>Номер телефона</th>
                                                <th>Соц. сети</th>
                                                <th>Статус</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                             @foreach($adopters as $adopter)
                                            <tr>
                                                <td>{{$adopter->created_at}}</td>
                                               
                                                 <td>{{$adopter->title}}</td>
                                                <td>Payoneer</td>
                                                <td class="bold">$568.50</td>
                                                <td class="pending">
                                                    <span>Pending</span>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
@endsection
