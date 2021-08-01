<div class="mb-4">
    {!! Form::label('title', 'Tútulo del Artículo') !!}  
    {!! Form::text('title', null, ['class'=>'form-input block w-full mt-1'.($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('title')
        <strong class="text-sm text-red-600">{{$message}}</strong>
    @enderror
  </div>
  <div class="mb-4">
      {!! Form::label('slug', 'Slug del Artículo') !!}  
      {!! Form::text('slug', null, ['class'=>'form-input block w-full mt-1'.($errors->has('slug') ? ' border-red-600' : ''), 'readonly']) !!}
      @error('slug')
        <strong class="text-sm text-red-600">{{$message}}</strong>
    @enderror
    </div>

  <div class="mb-4">
      {!! Form::label('subtitle', 'Subtítulo del Artículo') !!}  
      {!! Form::text('subtitle', null, ['class'=>'form-input block w-full mt-1'.($errors->has('subtitle') ? ' border-red-600' : '')]) !!}
      @error('subtitle')
        <strong class="text-sm text-red-600">{{$message}}</strong>
    @enderror
  </div>

  <div class="mb-4">
      {!! Form::label('description', 'Contenido del Artículo') !!}
      {!! Form::textarea('description', null, ['class'=>'form-input block w-full mt-1'. ($errors->has('description') ? ' border-red-600' : '')]) !!}
      @error('description')
          <strong class="text-sm text-red-600">{{$message}}</strong>
      @enderror
  </div>
  <div class="grid grid-cols-3 gap-4">
      <div>
          {!! Form::label('carticle_id', 'Categoría :') !!}
          {!! Form::select('carticle_id', $carticles, null, ['class'=>'form-input block w-full mt-1']) !!}
      </div>
      
  </div>
      <h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>
  <div class="grid grid-cols-2 gap-4">
      <figure>
          @isset($article->img)
           <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($article->img->url)}}" alt="">
          @else
           <img id="picture" class="w-full h-64 object-cover object-center" src="https://www.pexels.com/photo/5965857/download/" alt="">   
          @endisset   
      </figure>
      <div>
          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis id, facilis aliquid suscipit fugit provident repellendus eos tempore incidunt magni fugiat doloremque ab enim, officiis dolor qui modi dolorum iste!</p>
          {!! Form::file('file', ['class'=>'form-input w-full'. ($errors->has('file') ? ' border-red-600' : ''), 'id'=>'file', 'accept'=>'image/*']) !!}
          @error('file')
          <strong class="text-sm text-red-600">{{$message}}</strong>
      @enderror
      </div>
  </div>