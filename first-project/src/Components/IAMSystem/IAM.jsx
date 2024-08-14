import React from 'react';
import './IAM.css';

function IAM() {
  return (
  <div>
  <div className="menu_bar">
    <h1 className="logo">Dashboard</h1>
    <ul>
      <li><a href="#">Users</a></li>
      <li><a href="#">Groups</a></li>
      <li><a href="#">Roles</a></li>
      <li><a href="#">Permissions</a></li>
    </ul>
  </div>
  <div className="tab">
    <table>
      <tbody><tr>
          <th className='user'>Users</th>
          <th>Groups</th>
          <th>Roles</th>
          <th className='per'>Permissions</th>
        </tr>
        <tr>
          <td className='nuser'><a href="#">No.of Users</a></td>
          <td><a href="#">No.of Groups</a></td>
          <td><a href="#">No.of Roles</a></td>
          <td className='nper'><a href="#">No.of Permissions</a></td>
        </tr>
      </tbody></table>
  </div>
</div>

  )
}

export default IAM;