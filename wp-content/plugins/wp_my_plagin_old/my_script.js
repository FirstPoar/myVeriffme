 
 
 
 //const veriff = Veriff(apiKey);
//  veriff.setOptions({ features: ['selfid', 'video_call'] })
 // veriff.mount('veriff-root')
  
  
/**
var data = {
  "verification": {
    "callback": "https://awesome.page",
    "person": {
      "firstName": "Tundmatu",
      "lastName": "Toomas",
      "idNumber": "1234567890"
    },
    "document": {
      "number": "B01234567",
      "type": "PASSPORT",
      "country": "EE"
    },
    "additionalData": {
      "citizenship": "EE",
      "placeOfResidence":"Tallinn"
    },
    "lang": "en",
    "features": ["selfid", "video_call"],
    "timestamp": "2016-05-19T08:30:25.597Z"
  }
}

jQuery.ajax({
  type: "POST",
  url: "http://stagingapi.veriff.me/v1/sessions/",
  data: data,
  headers: {
    "Authorization": "Basic ".concat(btoa("admin:secret123!"))
  },
  success:function()
  {
      
  },
  error: function()
  {
      alert();
  },
});

/**/
