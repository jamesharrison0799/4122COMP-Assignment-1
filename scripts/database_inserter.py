#install mySql connector
#pip install mysql-connector

import mysql.connector

db = mysql.connector.connect(host="localhost",user="root")

name = "Americas Army: Proving Grounds"
price = "0"
rating = "3"
isGotW = "0"
genre = "Action"
link = "https://store.steampowered.com/app/203290/Americas_Army_Proving_Grounds/"

short_desc = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin nisi lorem, a euismod ligula volutpat nec. Vestibulum id tellus ante. Proin vel volutpat ligula. Vestibulum ante sapien, gravida eu diam eu, luctus pulvinar urna."
review = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet arcu quis enim maximus imperdiet. Mauris accumsan sit amet velit id ultrices. Integer sed leo sodales, finibus quam ornare, viverra ante. Vestibulum justo quam, tempor sit amet dignissim vel, sagittis vel elit. Vestibulum feugiat consectetur risus at fringilla. Duis mattis volutpat dui quis laoreet. Donec eget lectus eget erat feugiat posuere. Aliquam erat volutpat. Nunc eleifend eleifend tellus non tempor. Nullam eu risus ipsum. Suspendisse potenti. Sed sollicitudin pellentesque nisl, nec ultrices elit varius ultricies. Integer eu nibh a ligula feugiat porta.\r\nNunc sit amet ipsum eros. Aenean pellentesque, nunc ac commodo molestie, ligula quam faucibus sapien, sed dapibus magna sem ut ipsum. Suspendisse aliquam magna eget diam posuere lacinia. Donec augue elit, iaculis bibendum lobortis a, ornare at augue. Vivamus vitae molestie eros. Suspendisse molestie fringilla augue, at auctor nisi sagittis quis. Curabitur molestie at purus non eleifend. Mauris mauris ex, pretium nec egestas luctus, dictum in arcu. Donec ante ex, suscipit at odio nec, facilisis elementum nisi. Vivamus iaculis pellentesque fringilla.\r\nNunc placerat, metus in mollis pharetra, diam metus iaculis neque, quis dictum sem quam quis nunc. Suspendisse volutpat nisi eget nisl volutpat, et posuere augue tristique. Aliquam commodo dui nec ultrices facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris congue ex id erat euismod, in pellentesque est feugiat. Cras quis felis nec erat accumsan eleifend. Suspendisse vitae nulla nec nisi consequat malesuada vel et orci. Donec feugiat elit ut tristique convallis. Praesent hendrerit arcu ut erat varius iaculis."

sql = "INSERT INTO `games` (`ID`, `Name`, `Price`, `Rating`, `isGotW`, `Genre`, `short_desc`, `review`, `link`) VALUES (NULL, name,price, rating,isGotW, genre, short_desc, review, link)"

cursor = db.cursor()
cursor.execute(sql)
db.commit()
