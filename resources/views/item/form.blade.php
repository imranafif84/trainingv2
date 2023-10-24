<div class="card-body">
    <div class="form-group">
        <label>Nama Item</label>
        <input type="text" name="item_name" class="form-control  @error('item_name') is-invalid @enderror" placeholder="Nama Item" value="{{ old('item_name',$item->item_name) }}">
        @error('item_name')
            <span class="error invalid-feedback">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Keterangan" value="{{ old('description',$item->description) }}">
        @error('description')
            <span class="error invalid-feedback">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Harga (RM)</label>
        <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" placeholder="Harga (RM)" value="{{ old('price',$item->price) }}">
        @error('price')
            <span class="error invalid-feedback">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label>Direkodkan Oleh</label>
        <select class="form-control  @error('user_id') is-invalid @enderror" name="user_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}" @if(old('user_id',$item->user_id)==$user->id) selected @endif>{{$user->name}}</option>
            @endforeach
        </select>
        @error('user_id')
            <span class="error invalid-feedback">{{$message}}</span>
        @enderror
    </div>
  </div>
