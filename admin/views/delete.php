  <div>
      <h3>Confirm delete</h3>
      <div class="row">
        <div class="col-sm-8">
          <p>
            Are you sure you want to delete {{bname}} ?
          </p>
        </div>
      </div>
      <div class="row margtop12">
        <div class="col-sm-6">
           <a href="#/"><button name="cancel" class="btn btn-success btn">
            No
          </button></a>
          <button name="delete" class="btn btn-danger btn" ng-click="deleteData()">
            Yes
          </button>
          <input name="theid" class="form-control input-lg" type="hidden" ng-model="id" />
        </div>
      </div>
    </div>