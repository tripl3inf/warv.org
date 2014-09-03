############################################
# Setup Server
############################################


set :stage, :production
set :stage_url, "http://warriorvodka.org"
server "104.131.24.82", user: "tripl3inf", roles: %w{web app db}
set :deploy_to, "/srv/warvdka/current"

############################################
# Setup Git
############################################

set :branch, "master"
