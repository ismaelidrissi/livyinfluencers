
<div class="container mx-auto px-4 sm:px-8 max-w-3xl mt-10">
<div class="grid grid-rows-2  items-center ">
    
  <label class="row-span-1 "> Filter influencers with score higher than {{$slider}}</label>
  <input  type="range"  wire:model.lazy="slider" min="1" max="100" value="50" class="row-span-1" id="myRange" >

</div>


<label>
    <span>active</span>
<input wire:model="selectedactive" name='values[]' type="checkbox" class="form-checkbox" value="active">
</label>

<label>
    <span>not active</span>
<input wire:model="selectednotactive" name='values[]' type="checkbox" class="form-checkbox" value="notactive">
</label>

</div>

