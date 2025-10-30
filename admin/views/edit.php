  <div>
      <h3>Edit business:</h3>
      <div class="row">
        <div class="col-sm-6">
          <input name="bname_e" class="form-control input-lg" type="text"
                 ng-model="bname" placeholder="business name" ng-required/><br/>
          <input name="address1_e" class="form-control input-lg" type="text"
                 placeholder="address" 
                 ng-model="address1" /><br/>
         <input name="city_e" class="form-control input-lg" type="text"
                 placeholder="city" 
                 ng-model="city" /><br/>
          <input name="zip_e" class="form-control input-lg smwidth" type="text" maxlength="12" 
                 placeholder="zip" 
                 ng-model="zip" /><br/>
          <input name="phone_e" class="form-control input-lg smwidth" type="text" maxlength="12" 
                 placeholder="phone" 
                 ng-model="phone" /><br/>
         <input name="theid" class="form-control input-lg" type="hidden"
                  ng-model="id" /><br/>
                  
        </div>
      </div>
      <div class="row margtop12">
        <div class="col-sm-6">
          <button name="update" class="btn btn-success btn" ng-click="updateData()">
            Save
          </button>
          <a href="#/"><button name="cancel" class="btn btn-warning btn">
            Cancel
          </button></a>
        </div>
      </div>
    </div>
