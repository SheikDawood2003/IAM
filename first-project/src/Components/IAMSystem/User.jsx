import React from 'react';
import './User.css';


function User() {
  return (
  <div>
    <div className="menu_bar">
      <h1 className="logo">Dashboard</h1>
      <ul>
        <li className="user"><a href="#">Users</a></li>
        <li><a href="#">Groups</a></li>
        <li><a href="#">Roles</a></li>
        <li><a href="#">Permissions</a></li>
      </ul>
    </div>
</div>
  );
};

export default User;