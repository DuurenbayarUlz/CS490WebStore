<style>
    .sidebar{
    display: flex;
    padding-top:50px;
    width:25%;
  }

  .sidebar ul{
    display: flex;
    flex-direction: column;
    list-style: none;
    border:1.5px solid black;
    border-radius: 8px;
    background-color: white;
    padding: 0px;
    width: 100%;
    font-weight: 550;
    font-size:larger;
  }

  .sidebar li{
    align-self: stretch;
    padding: 10px;
    padding-left: 15px;
  }

  .sidebar li+li{
    border-top:1px solid black;
  }
</style>

<div class="sidebar">
    <ul>
        <li><a href="accountsettings.php">Account Settings</a></li>
        <li><a href="#">Order History</a></li>
        <li><a href="wishlist.php">Wishlist</a></li>
        <li><a href="#">Refill Wallet</a></li>
    </ul>
</div>