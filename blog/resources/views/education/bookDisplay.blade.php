<div class="col-md-3">
    <div class="ibox">
        <div class="ibox-content product-box">
            <div class="product-imitation">
                <img class ="img" src = "{{ asset( $book->image) }}">
            </div>
            <div class="product-desc">
                <span class="product-price">
                    @if($book->paid == "paid")
                        {{ "$".$book->price }}
                    @else
                        {{ "Free "}}
                    @endif
                </span>
                <a href="#" class="product-name">{{ $book->name }}</a>

                <div class="small m-t-xs">
                    <br>
                </div>
                <div class="m-t text-righ">
                     
                                 <a href="{{ url('/library/'.$book->id.'/download') }}" class="btn btn-success waves-effect"><i class="mdi mdi-account-settings-variant mr-1">Download</i></a>
                        </div>
            </div>
        </div>
    </div>	
</div>  