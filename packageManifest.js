#!/usr/bin/env node
/**
 * Created by hectorrios on 8/23/16.
 */
var AdmZip = require('adm-zip');

var zip = new AdmZip();

zip.addLocalFolder('custom', 'custom/');
zip.addLocalFolder('scripts', 'scripts/');
zip.addLocalFile('manifest.php');

zip.writeZip('../news-dashlet.zip');



