@extends('layouts.admin')

@section('title-block', isset($route) ? "Редактировать маршрут" : 'Добавление нового маршрута')





@section('content')

    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{isset($route) ? "Редактировать маршрут" : 'Добавить новый маршрут'}}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" action="{{ isset($route) ? route('admin.routes.update', $route->id) : route('admin.routes.store')}}" method="POST" class="space-y-5 mt-5">
                @csrf

                @if(isset($route))

                    @method('PUT')

                @endif

                <input name="name" value="{{isset($route) ? $route->name : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Название" />
                <input name="start_point" id="start_point" value="{{isset($route) ? $route->start_point : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Начальная точка" />
                <input name="end_point" id="end_point" value="{{isset($route) ? $route->end_point : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Конечная точка" />
                <div id="map-route"></div>
                <button onclick="return false" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium" id="savebutton">Сохранить маршрут</button>
                <input name="points" id="points" value="{{isset($route) ? $route->points : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Координаты точек маршрута" />
                <input name="price" value="{{isset($route) ? $route->price : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Цена" />
                <input name="categories_id" value="{{isset($route) ? $route->categories_id : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Категория" />

                <input name="description" value="{{isset($route) ? $route->description : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Описание" />
                <input name="route_name_points" value="{{isset($route) ? $route->route_name_points : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Населенные пункты маршрута" />

            @if(isset($route) && $route->images)

                    <div>
                        <img alt="" class="h-64 w-64" src="{{\Illuminate\Support\Facades\Storage::url($route->images)}}">
                    </div>
                @endif


                <input name="images" type="file" class="w-full h-12" placeholder="Обложка" />

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>

@endsection

@section('map-script')
    <script type="text/javascript">




    </script>

    <script src="{{asset('/js/map-create.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhg-WuaaDabIe_9efqfolUCAbgrr98C4g&callback=initMap" async defer></script>

@endsection

