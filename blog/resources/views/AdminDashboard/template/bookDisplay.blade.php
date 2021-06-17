<div class="col-md-3">
    <div class="ibox">
        <div class="ibox-content product-box">
            <div class="product-imitation">
                <img src = "{{ asset( $book->image) }}">
            </div>
            <div class="product-desc">
                <span class="product-price">
                    @if($book->price > '0' || $book->paid == "unpaid")
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
                     <form action="{{ url('admin/'.session()->get('LoginID').'/deletebook/'.$book->id) }}" method = "POST">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" class="btn btn-danger waves-effect"><i class="mdi mdi-account-settings-variant mr-1"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>	
</div>