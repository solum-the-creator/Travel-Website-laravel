@extends('layouts.admin')

@section('title-block', isset($place) ? "Редактировать место проживания" : 'Добавление нового места')





@section('content')

    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{isset($place) ? "Редактировать место проживания" : 'Добавить новое место'}}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" action="{{ isset($place) ? route('admin.places-live.update', $place->id) : route('admin.places-live.store')}}" method="POST" class="space-y-5 mt-5">
                @csrf

                @if(isset($place))

                    @method('PUT')

                @endif

                <input name="name" value="{{isset($place) ? $place->name : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Название" />
                <input name="address" value="{{isset($place) ? $place->address : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Адрес" />
                <input name="coordinates" value="{{isset($place) ? $place->coordinates : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Координаты" />
                <input name="price" value="{{isset($place) ? $place->price : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Цена" />
                <input name="categories_id" value="{{isset($place) ? $place->categories_id : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Категория" />

                <input name="description" value="{{isset($place) ? $place->description : ''}}" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Описание" />

                @if(isset($place) && $place->images)

                    <div>
                        <img alt="" class="h-64 w-64" src="{{\Illuminate\Support\Facades\Storage::url($place->images)}}">
                    </div>
                @endif


                <input name="images" type="file" class="w-full h-12" placeholder="Обложка" />

                <input name="all_images[]" type="file" class="w-full h-12" multiple placeholder="Изображения места" />

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>

@endsection


