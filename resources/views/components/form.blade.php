@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="container py-4">
  <form action="{{route('store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Id</label>
      <input class="form-control" type="text" name="product_id" readonly value="{{$item->id}}"
        placeholder="Identificativo" />
    </div>
    <div class="mb-3">
      <label class="form-label">Nome Prodotto</label>
      <input class="form-control" type="text" name="product_name" readonly value="{{$item->title}}"
        placeholder="Nome prodotto" />
    </div>
    <div class="mb-3">
      <label class="form-label">Prezzo</label>
      <input class="form-control" type="text" name="product_price" value="{{$item->price}}" readonly
        placeholder="Prezzo" />
    </div>
    <hr>
    <div class="mb-3">
      <label class="form-label">Cognome</label>
      <input class="form-control" type="text" name="surname" placeholder="Cognome" value="{{old('surname')}}" />
    </div>
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input class="form-control" type="text" name="name" placeholder="Nome" value="{{old('name')}}" />
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input class="form-control" type="text" name="email" placeholder="Email" value="{{old('email')}}" />
    </div>


    <!--  -->
    <div class="d-grid">
      <button class="btn btn-primary btn-lg" type="submit">Invia</button>
    </div>

  </form>

</div>