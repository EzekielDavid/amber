create table inventory_group (
	id int unsigned auto_increment not null primary key,
	user_id int not null,
        supplier_id int not null,
        date_received  datetime, 
        date_created timestamp,
        remarks varchar(500),
        inventory_no varchar(500),
        branch_id int,
        inventory_type varchar(100),
        branch_id_from int
	);
    
create table inventory_items (
        id int unsigned auto_increment not null primary key,
	inventory_id int not null,
        item_id int not null,
        quantity float not null, 
        remarks varchar(250),
        original_quantity float,
        parent_id int
	);

create table inventory_transfer (
        id int unsigned auto_increment not null primary key,
        inventory_items int not null,
        branch_id int not null,
        branch_id int  
        );



/*
query

*/

select SUM(ii.quantity), i.item_desc1 from  inventory_group 
inner join inventory_items as ii
on ii.inventory_id = inventory_group.id
inner join items as i
on i.id = ii.item_id
where inventory_group.inventory_type = "Warehouse"
GROUP BY i.item_desc1
