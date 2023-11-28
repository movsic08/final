<div class="card">    

    <div class="card-body">
      <h6 class="card-title">Choose a size:</h6>

      <div class="row" >

        @if(!empty($product_sizes))

          @foreach($product_sizes as $size)
          <div class="col-md-3 " style="">

            <div class="form-check">
              <input type="radio" class="form-check-input sizes" id="size-{{ $size['id'] }}" name="size_id" value="{{ $size['id'] }}">
              <label class="form-check-label" for="radio1">
                
                {{ $size['size'] }}
              </label>
            </div>

          </div>
          @endforeach

        @else 
          <div class="col-md-12">
            <small>No sizes available</small>
          </div>
        @endif


      </div>
    </div>

  </div>