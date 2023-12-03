<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent"> 
              <h5 class="mb-0">Update Product</h5>
             </div>
             <div class="card-body">
              <div class="border p-3 rounded">
                  <form class="row g-3">
                      <div class="col-12">
                          <label class="form-label">Product Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror"
                              placeholder="Product Name" wire:model="name">
                          @error('name')
                              <span class="invalid-feedback"> {{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-12">
                          <label class="form-label">Full description</label>
                          <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Full description" rows="4"
                              cols="4" wire:model="description"></textarea>
                          @error('description')
                              <span class="invalid-feedback"> {{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-12">
                          <label class="form-label">Images</label>
                          <input class="form-control  @error('image') is-invalid @enderror" type="file"
                              wire:model="image">
                          @error('image')
                              <span class="invalid-feedback"> {{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-12 col-md-6">
                          <label class="form-label">Category</label>
                          <select class="form-select  @error('category_id') is-invalid @enderror"
                              wire:model="category_id">
                              <option>Select Category</option>
                              <option>Fashion</option>
                              <option>Electronics</option>
                              <option>Furniture</option>
                              <option>Sports</option>
                          </select>
                          @error('category_id')
                              <span class="invalid-feedback"> {{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-12 col-md-6">
                          <label class="form-label">Status</label>
                          <select class="form-select  @error('status') is-invalid @enderror" wire:model="status">
                              <option>Select Status</option>
                              <option>Normal</option>
                              <option>Flash Sale</option>
                          </select>
                          @error('status')
                              <span class="invalid-feedback"> {{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-12">
                          <div class="row g-3">
                              <div class="col-lg-4">
                                  <label class="form-label">Regular Price</label>
                                  <input type="text" class="form-control  @error('regular_price') is-invalid @enderror"
                                      placeholder="Regular Price" wire:model="regular_price">
                                  @error('regular_price')
                                      <span class="invalid-feedback"> {{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="col-lg-4">
                                  <label class="form-label">Discounted Price</label>
                                  <input type="text" class="form-control  @error('discounted_price') is-invalid @enderror"
                                      placeholder="Discounted Price" wire:model="discounted_price">
                                  @error('discounted_price')
                                      <span class="invalid-feedback"> {{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="col-lg-4">
                                  <label class="form-label">Subscription Name</label>
                                  <input type="text" class="form-control  @error('subscription_name') is-invalid @enderror"
                                      placeholder="Subscription Name" wire:model="subscription_name">
                                  @error('subscription_name')
                                      <span class="invalid-feedback"> {{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary px-4">Submit Item</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div><!--end row-->
</div>

