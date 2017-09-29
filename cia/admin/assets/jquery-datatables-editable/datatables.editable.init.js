/**
* Theme: Montran Admin Template
* Author: Coderthemes
* Component: Editable
*
*/

(function( $ ) {

	var pageURL = $(location).attr("href");;
	//console.log(pageURL);
	var arr = pageURL.split('/');
	//console.log(arr[arr.length-1]);
	var page = arr[arr.length-1];


	'use strict';

	if(arr[arr.length-1]=='users.php'){
		var tablecol = [null, null, null, null, null,null, { "bSortable": false }]; //6
	}else if(arr[arr.length-1]=='colleges.php'){
		var tablecol = [null, null, null, null, { "bSortable": false }]; //5
	}

	var EditableTable = {

		options: {
			addButton: '#addToTable',
			table: '#datatable-editable',
			dialog: {
				wrapper: '#dialog',
				cancelButton: '#dialogCancel',
				confirmButton: '#dialogConfirm',
			}
		},

		initialize: function() {
			this
				.setVars()
				.build()
				.events();
		},

		setVars: function() {
			this.$table				= $( this.options.table );
			this.$addButton			= $( this.options.addButton );

			// dialog
			this.dialog				= {};
			this.dialog.$wrapper	= $( this.options.dialog.wrapper );
			this.dialog.$cancel		= $( this.options.dialog.cancelButton );
			this.dialog.$confirm	= $( this.options.dialog.confirmButton );

			return this;
		},

		build: function() {
			this.datatable = this.$table.DataTable({
				//aoColumns: tablecol  //reference fix: https://stackoverflow.com/questions/37602081/adding-table-data-to-editable-datatables-removes-filters
				columnDefs: [
					{ targets: -1, orderable: false }
				]
			});

			window.dt = this.datatable;

			return this;
		},

		events: function() {
			var _self = this;

			this.$table
				.on('click', 'a.save-row', function( e ) {
					e.preventDefault();

					var id = $(this).attr('data-rel');

					_self.rowSave( $(this).closest( 'tr' ), id);
				})
				.on('click', 'a.cancel-row', function( e ) {
					e.preventDefault();

					_self.rowCancel( $(this).closest( 'tr' ) );
				})
				.on('click', 'a.edit-row', function( e ) {
					e.preventDefault();

					_self.rowEdit( $(this).closest( 'tr' ) );
				})
				.on( 'click', 'a.remove-row', function( e ) {
					e.preventDefault();

					var $row = $(this).closest( 'tr' );

					//get user id
					var id = $(this).attr('data-rel');

					$.magnificPopup.open({
						items: {
							src: _self.options.dialog.wrapper,
							type: 'inline'
						},
						preloader: false,
						modal: true,
						callbacks: {
							change: function() {
								_self.dialog.$confirm.on( 'click', function( e ) {
									e.preventDefault();

									_self.rowRemove( $row, id );
									$.magnificPopup.close();
								});
							},
							close: function() {
								_self.dialog.$confirm.off( 'click' );
							}
						}
					});
				});

			this.$addButton.on( 'click', function(e) {
				e.preventDefault();

				_self.rowAdd();
			});

			this.dialog.$cancel.on( 'click', function( e ) {
				e.preventDefault();
				$.magnificPopup.close();
			});

			return this;
		},

		// ==========================================================================================
		// ROW FUNCTIONS
		// ==========================================================================================
		rowAdd: function() {
			this.$addButton.attr({ 'disabled': 'disabled' });

			var actions,
				data,
				$row,
				colstoAdd;

			actions = [
				'<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>',
				'<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>',
				'<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>',
				'<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>'
			].join(' ');

			/*if(arr[arr.length-1]=='users.php'){
				colstoAdd = [ '', '', '','','','', actions ];
			}
			data = this.datatable.row.add(colstoAdd);*/

			var numCols = this.datatable.columns().nodes().length;
			var rowData = [];
			for(var i = 0; i < numCols - 1; i++){ rowData.push(''); }
			rowData.push(actions);
			data = this.datatable.row.add(rowData);


			$row = this.datatable.row( data[0] ).nodes().to$();
			$row
				.addClass( 'adding' )
				.find( 'td:last' )
				.addClass( 'actions' );

			this.rowEdit( $row );

			this.datatable.order([0,'asc']).draw(); // always show fields
		},

		rowCancel: function( $row ) {
			var _self = this,
				$actions,
				i,
				data;

			if ( $row.hasClass('adding') ) {
				this.rowRemove( $row );
			} else {

				data = this.datatable.row( $row.get(0) ).data();
				this.datatable.row( $row.get(0) ).data( data );

				$actions = $row.find('td.actions');
				if ( $actions.get(0) ) {
					this.rowSetActionsDefault( $row );
				}

				this.datatable.draw();
			}
		},

		rowEdit: function( $row ) {
			var _self = this,
				data;

			data = this.datatable.row( $row.get(0) ).data();

			$row.children( 'td' ).each(function( i ) {
				var $this = $( this );

				if ( $this.hasClass('actions') ) {
					_self.rowSetActionsEditing( $row );
				} else {

					if(page=='users.php'){

						/*if(i==0){
							$this.html( '<input type="text" readonly class="form-control input-block" value="' + data[i] + '"/>' );
						}else*/
						if(i==0){
							$this.html( '<select name="usertype" class="form-control input-block">'+
								'<option value="admin">admin</option>'+
								'<option value="user">user</option>'+
								'</select>' );
						}else if(i==4){
							$this.html( '<input type="password" class="form-control input-block" value="' + data[i] + '"/>' );
						}
						else{
							$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '"/>' );
						}
					}
				}
			});
		},

		rowSave: function( $row, objID ) {
			var _self     = this,
				$actions,
				values    = [];
			/*values = $row.find('td').map(function() {
				var $this = $(this);

				if ( $this.hasClass('actions') ) {
					_self.rowSetActionsDefault( $row );
					return _self.datatable.cell( this ).data();
				}
				//else if($this.find('option:selected')){
				//	console.log('selected:'+$this.find('option:selected'));
				//	return $.trim($this.find('option:selected').val());
				//}
				else{
					console.log('input:'+$this.find('input'));
					return $.trim($this.find('input').val());
				}
			});*/

			var hasAdding = $row.hasClass( 'adding' );

			//Add user
			if(hasAdding){
				//if ( $row.hasClass( 'adding' ) ) {
					$row.addClass( 'adding' );
					_self.rowSetActionsEditing( $row );

					//highlight username value
					$row.find('input')[2].select();
				//}

				values = $row.find('td').map(function() {
					var $this = $(this);

					if ( $this.hasClass('actions') ) {
						_self.rowSetActionsDefault( $row );
						return _self.datatable.cell( this ).data();
					}else{
						return $.trim( $this.find('.input-block').val() );
					}
				});


				var invalid = false;
				var alertmsg = '';

				/*$.post('actions/add.php',{'values':values.toArray()})
				 .done(
				 function(data){
				 var j = $.parseJSON(data);
				 console.log('Notice:'+j.notice);
				 if(j.notice == "Success!"){
				 invalid = false;
				 }else{
				 invalid=true;
				 }
				 }
				 );*/

				$.ajax({
					url:'actions/add.php',
					postType:'json',
					type:'post',
					data:{'userID':objID,'page':page,'values':values.toArray()},
					success:function(data){

						var j = $.parseJSON(data);
						//console.log('Notice:'+j.notice);
						if(j.notice == "Success!"){
							invalid = false;
						}else{
							invalid=true;
							alertmsg = j.notice+' '+ j.msg;
						}
					},
					async:false
				});

				if(invalid){

					alert(alertmsg);

					if ( $row.hasClass( 'adding' ) ) {
						$row.addClass( 'adding' );
						_self.rowSetActionsEditing( $row );

						//highlight username value
						$row.find('input')[2].select();
					}
				}else{

					/*if ( $row.hasClass( 'adding' ) ) {
					 console.log('Has adding...');
					 }*/

					this.datatable.row( $row.get(0) ).data( values );

					$actions = $row.find('td.actions');

					if ( $actions.get(0) ) {
						this.rowSetActionsDefault( $row );
					}
					this.datatable.draw();

					location.reload();

				}
			}
			else{
				//Update user
				values = $row.find('td').map(function() {
					var $this = $(this);

					if ( $this.hasClass('actions') ) {
						_self.rowSetActionsDefault( $row );
						return _self.datatable.cell( this ).data();
					}else{
						return $.trim( $this.find('.input-block').val() );
					}
				});


				var invalid = false;
				var alertmsg = '';

				$.ajax({
					url:'actions/edit.php',
					postType:'json',
					type:'post',
					data:{'userID':objID,'page':page,'values':values.toArray()},
					success:function(data){

						var j = $.parseJSON(data);

						if(j.notice == "Success!"){
							invalid = false;
						}else{
							invalid=true;
							alertmsg = j.notice+' '+ j.msg;
						}
					},
					async:false
				});
				//console.log(invalid);
				if(invalid){

					alert(alertmsg);

					if ( $row.hasClass( 'adding' ) ) {
						$row.addClass( 'adding' );
						_self.rowSetActionsEditing( $row );

						//highlight username value
						$row.find('input')[2].select();
					}
				}else{

					this.datatable.row( $row.get(0) ).data( values );

					$actions = $row.find('td.actions');

					if ( $actions.get(0) ) {
						this.rowSetActionsDefault( $row );
					}
					this.datatable.draw();

					location.reload(true);

				}
			}
		},

		rowRemove: function( $row, id ) {
			if ( $row.hasClass('adding') ) {
				this.$addButton.removeAttr( 'disabled' );
			}

			//ajax call
			$.ajax({
				url:'actions/delete.php',
				postType:'json',
				type:'post',
				data:{'id':id,'page':page},
				success:function(data){

					location.reload();

					//console.log(data);
					/*var j = $.parseJSON(data);
					 //console.log('Notice:'+j.notice);
					 if(j.notice == "Success!"){
					 invalid = false;
					 }else{
					 invalid=true;
					 alertmsg = j.notice+' '+ j.msg;
					 }*/
				},
				async:false
			});

			this.datatable.row( $row.get(0) ).remove().draw();
		},

		rowSetActionsEditing: function( $row ) {
			$row.find( '.on-editing' ).removeClass( 'hidden' );
			$row.find( '.on-default' ).addClass( 'hidden' );
		},

		rowSetActionsDefault: function( $row ) {
			$row.find( '.on-editing' ).addClass( 'hidden' );
			$row.find( '.on-default' ).removeClass( 'hidden' );
		}

	};


	$(function() {
		EditableTable.initialize();

		//EditableTable.rowSave(dataArr);
	});


}).apply( this, [ jQuery ]);
