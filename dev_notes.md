# CATATAN PENGERJAAN PROJECT

## Create Vendor ZIP in PowerShell
'''bash
if (Test-Path -Path "vendor.zip") {
    Remove-Item -Path "vendor.zip"
}

# Create a new 'vendor.zip' with the contents of the 'vendor' directory
Compress-Archive -Path vendor -DestinationPath vendor.zip
'''

