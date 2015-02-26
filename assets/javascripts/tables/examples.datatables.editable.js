/*
Name: 			Tables / Editable - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.1.0
*/

(function( $ ) {

	'use strict';

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
		//define cantidad de columnas en el datatable 
			this.datatable = this.$table.DataTable({
				aoColumns: [
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,	
					null,
					null,
					{ "bSortable": false }
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
					_self.rowSave( $(this).closest( 'tr' ) );
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

				_self.rowRemove( $row );
	
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
				$row;

			actions = [
				'<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>',
				'<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>',
				'<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>',
				'<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>'
			].join(' ');

			data = this.datatable.row.add(['','','','','', '', '', '', '', '', actions ]);

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
	switch(i) {
    case 0:
	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="codigo_consejera" onchange="busqueda_consejera(this)"/>' );
        break;  
	case 1:
  	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="consejera_nombre"/ readonly>' ); 
        break;
    case 2:
	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="consejera_zona"/ readonly>' );	
        break;
	case 3:
	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="pedido_id" readonly/>' );		
	break;
	case 4:
	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="solicitante"/>' );		
        break;
	case 5:
	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="consejera_cod" readonly/>' );				
        break;	
	case 6:
	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="autorizacion"/ >' );					
        break;	
	case 7:
	$this.html( '<input type="text" class="form-control input-block" value="' + data[i] + '" id="observacion"/ > ' );						
        break;
	case 8:
		$this.html('<select id="buzones"><option>GERENTE</option></select>');						
		break;
	case 9:
	$this.html( '<input type="text" class="form-control input-block" id="bodegaje" readonly/>' );						
	break;		
}			
		
					
				}
			});
		},

		rowSave: function( $row ) {
			var _self     = this,
				$actions,
				values    = [];

			if ( $row.hasClass( 'adding' ) ) {
				this.$addButton.removeAttr( 'disabled' );
				$row.removeClass( 'adding' );
			}

			values = $row.find('td').map(function() {
				var $this = $(this);

				if ( $this.hasClass('actions') ) {
					_self.rowSetActionsDefault( $row );
					return _self.datatable.cell( this ).data();
				} else {
				if(typeof  $this.find('select').val() == 'undefined'){
					return $.trim( $this.find('input').val() );
					}else{
					return $.trim( $this.find('select').val() );
					}
				}
			});

			this.datatable.row( $row.get(0) ).data( values );

			$actions = $row.find('td.actions');
			if ( $actions.get(0) ) {
				this.rowSetActionsDefault( $row );
			}

			this.datatable.draw();
		},

		rowRemove: function( $row ) {
			if ( $row.hasClass('adding') ) {
				this.$addButton.removeAttr( 'disabled' );
			}

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
	});

}).apply( this, [ jQuery ]);