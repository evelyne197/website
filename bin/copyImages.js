var fs = require("fs-extra");
const srcDir = 'app/resources/img';
const destDir = '.tmp/resources/img';

if (!fs.existsSync(destDir)){
    fs.mkdirSync(destDir, { recursive: true });
}

// To copy a folder
fs.copy(srcDir, destDir, function (err) {
  if (err) {
    console.error(err);
  } else {
    console.log("success!");
  }
});
