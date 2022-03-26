<div class="form-group">
              <label for="">{{$label}}</label>
              <input type="{{$type}}" name="{{$name}}" id="" class="form-control" value="{{old('name')}}" placeholder="" aria-description"helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
              <span class="text-danger">
              <!-- @error('name')
                    {{$message}}
              @enderror -->
              </span>
</div>