<form action="{{ url($url) }}" method="post" enctype="multipart/form-data">
@csrf
@method($method)

<div class="form-group">
    <label for=""><strong>Nombre:</strong></label>
    <input class="form-control" type="text" name="name" id="" value="{{old('name', $application->name)}}">
    <p class="text-danger">{{ $errors->first('name') }}</p>
</div>


<div class="form-group">
    <label for="category_id"><strong>Categoria:</strong></label>
    <div class="col-12" >
    <select name="category_id" id="category_id" class="form-control" required>
    <option value="1">Running</option>
    <option value="2">Nutrición</option>
    <option value="3">Musculación</option>
    <option value="4">Elongación</option>
    <option value="5">Yoga</option>
    <option value="6">Indumentaria</option>
    </select>
    </div>
    </div>

  <div class="form-group">
    <label for="exampleFormControlFile1"><strong>Imagen de la app:</strong></label>
    <input type="file" class="form-control-file" name="image_url" id="image_url">
    <p class="text-danger">{{ $errors->first('image_url') }}</p>
    </div>

<div class="form-group">
    <label for=""><strong>Descripción:</strong></label>
    <textarea class="form-control" name="description">{{ old('description', $application->description) }} </textarea>
    <p class="text-danger">{{ $errors->first('description') }}</p>
</div>

<div class="form-group">
    <label for=""><strong>Precio:</strong></label>
    <input class="form-control" type="number" name="price" id="" value="{{old('price', $application->price)}}">
    <p class="text-danger">{{ $errors->first('price') }}</p>
</div>

<div class="form-group">
    <button class="btn btn-success">Crear</button>
</div>
</form>

<div class="btn-back">
<a href="/userprofile"><button class="btn btn-primary">volver</button></a>
</div>