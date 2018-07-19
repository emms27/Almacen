<div class="alert alert-block alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Error!</h4>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{!!$error!!}</li>
              @endforeach
            </ul>
</div>
