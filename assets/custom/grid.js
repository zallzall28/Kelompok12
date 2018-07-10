$(function() {
  $.ajax({
    type: "GET",
    url: "kamarJs/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Hapus Data Kamar?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "kamarJs/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addKamar/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateKamarJs/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteKamarJs/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "id_kamar",
          title: "Id Kamar",
          type: "text",
          width: 150
        },
        {
          name: "nama_kamar",
          title: "Nama Kamar",
          type: "text",
          width: 150
        },
        {
          name: "harga",
          title: "Harga",
          type: "number",
          width: 150
        },
        { type: "control" }
      ]
    });
  });
});
