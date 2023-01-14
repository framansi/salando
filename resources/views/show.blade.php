<x-main>
  <section class="py-5">
    <div class="container px-5 my-5">
      <div class="row gx-5 justify-content-center">
        <div class="col-lg-6">
          <div class="text-center mb-5">
            <h1 class="fw-bolder">{{$item->title}}</h1>
            <p class="lead fw-normal text-muted mb-0">{{$item->description}}</p>
          </div>
        </div>
      </div>
      <div class="row gx-5">
        <div class="col-12"><img class="img-fluid rounded-3 mb-5" src="{{$item->image}}" alt="..."></div>
      </div>
      <x-form :item="$item" />
    </div>
  </section>
</x-main>