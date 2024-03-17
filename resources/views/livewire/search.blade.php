<div>
    <div class="search-input">
        <form wire:submit.prevent="search" action="#">
          <input type="text" wire:model.live="search" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
          <button type="submit">Search Now</button>
        </form>
      </div>
      @if(!empty($results))
      <div class="mt-3">
          <ul class="list-group">
              @foreach ($results as $item)
                  <li class="list-group-item"><a href="shop/{{$item->id}}" class="text-dark">{{ $item->title }}</a></li>
              @endforeach
          </ul>
      </div>
  @endif
</div>
