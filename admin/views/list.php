   <div>
        <div class="row">
         <h2>Businesses in Vernon</h2>  <div class="col-sm-12">
         
              <a href="#/add"><button class="btn btn-primary-admin btn-md margbtm">
              Add new business
            </button></a>
          </div>
        </div>
        <div class="row" ng-repeat="business in businesses"
             ng-class="'color' + ($index % 2)" >
          <div class="col-sm-8">
            <h4>{{$index + 1}}: {{business.bname}}</h4>
          </div>
          <div class="col-sm-4 margtop5">
            <div class="pull-right">
            <a href="#/{{business.id}}"><button name="edit" class="btn btn-warning btn-sm" >
                Edit
              </button></a>
             <a href="#/delete/{{business.id}}"> <button name="delete" class="btn btn-danger btn-sm"
                      ng-click="startRemove($index)">
                Delete
              </button></a>
            </div>
          </div>
        </div>
      </div>
