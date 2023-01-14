<div class="col-lg-4 mb-5">
  <div class="card h-100 shadow border-0">
    <img class="card-img-top" style="height: 20rem;" src="{{$data->image}}" alt="..." />
    <div class="card-body p-4">
      <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{$data->category}}</div>
      <a class="text-decoration-none link-dark stretched-link" href="{{route('show', ['id' => $data->id])}}">
        <h5 class="card-title mb-3">{{$data->title}}</h5>
      </a>
      <p class="card-text mb-0">{{$data->description}}</p>
    </div>
    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
      <div class="d-flex align-items-end justify-content-between">
        <div class="d-flex align-items-center">
          <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
          <div class="small">
            <div class="fw-bold">Prezzo</div>
            <div class="text-muted">{{$data->price}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>