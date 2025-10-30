     <div>
        <h3>Add new business:</h3>
        <div class="row">
          <div class="col-sm-6">
          <input name="bname_a" class="form-control input-lg" type="text"
                 placeholder="business name" 
                 ng-model="bname"  /><br/>
          <input name="address1_a" class="form-control input-lg" type="text"
                 placeholder="address" 
                 ng-model="address1" /><br/>
         <input name="city_a" class="form-control input-lg" type="text"
                 placeholder="city" 
                 ng-model="city" /><br/>
         <input name="zip_a" class="form-control input-lg smwidth" type="text" maxlength="12" 
                 placeholder="zip" 
                 ng-model="zip" /><br/>
          <input name="phone_a" class="form-control input-lg smwidth" type="text" maxlength="12" 
                 placeholder="phone" 
                 ng-model="phone" /><br/>
          </div>
        </div>
        <div class="row margtop12">
          <div class="col-sm-6">
	     <button name="addthis" class="btn btn-success btn" ng-click="addData()">
              Add
            </button>
           <a href="#/"> <button name="cancel" class="btn btn-warning btn"
                    ng-click="cancel()">
              Cancel
            </button></a>
          </div>
        </div>
      </div>