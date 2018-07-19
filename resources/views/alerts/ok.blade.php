<div class="alert alert-block alert-success fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">OK!</h4>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{!!$error!!}</li>
              @endforeach
            </ul>
</div>
