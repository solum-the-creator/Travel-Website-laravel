@extends('layouts.page')

@section('title-block','Место забронировано')





@section('content')
    <main id="main" class="site-main">
        <div class="page-title page-title--small align-left">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Подтверждение бронирования</h1>
                </div>
            </div>
        </div><!-- .page-title -->
        <div class="site-content">
            <div class="checkout-area checkout-thanks-area" >
                <div class="container">
<!--                    <h2>Спасибо за оставленный </h2>-->
                    <h3>Информация о бронировании</h3>
                    <div class="order-detail" id="print-content">
                        <p>
                            <span>Место</span>
                            <span class="pakage-name">{{$reservation->getBasePlace()->name}}</span>
                        </p>
                        <p>
                            <span>Тип размещения</span>
                            @if($reservation->booking_type_id == 1)
                                <span class="order-info">Номер в коттедже</span>
                            @elseif($reservation->booking_type_id == 2)
                                <span class="order-info">Коттедж</span>
                            @endif

                        </p>

                        <p>
                            <span>Коттедж</span>
                            <span class="order-info">{{$reservation->getPlace()->name}}</span>
                        </p>

                        <p>
                            <span>Гости</span>
                            <span class="order-info">{{$reservation->number_guest}}</span>
                        </p>
                        <p>
                            <span>Дата заезда</span>
                            <span class="order-info">{{$reservation->arrival_date}}</span>
                        </p>
                        <p>
                            <span>Дата выезда</span>
                            <span class="order-info">{{$reservation->departure_date}}</span>
                        </p>
                        <p class="total">
                            <span>Стоимость</span>
                            <span>{{$reservation->final_price}} BYN</span>
                        </p>
                    </div>
                    <div class="row">
                        <div class="align-center col-lg-6">
                            <a href="#" onClick="javascript:CallPrint('print-content');" class="btn btn-print"><i class="las la-print"></i>Распечатать подтверждение</a>
                        </div>
                        <div class="align-center col-lg-6">
                            <a href="{{route('profile-reserve')}}"  class="btn btn-print">Бронирования</a>
                        </div>
                    </div>

                </div>
            </div><!-- .checkout-area -->
        </div><!-- .site-content -->
    </main><!-- .site-main -->

@endsection

@section('map-script')



    <script>
        function CallPrint(strid) {
            var prtContent = document.getElementById(strid);

            var WinPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
            WinPrint.document.write('');
            WinPrint.document.write('Информация о бронировании');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.write('');
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
            prtContent.innerHTML=strOldOne;
        }
    </script>

@endsection


