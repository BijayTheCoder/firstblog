<div style="margin-left:250px" class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Operations</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><span><button type="button" class="btn btn-inline btn-primary">EDIT</button>
                    <button type="button" class="btn btn-inline btn-danger" >DELETE</button></span>
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <button type="button" class="btn btn-outline-info">Add User</button>
              </div>
