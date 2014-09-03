############################################
# Setup Server
############################################


set :stage, :production
set :stage_url, "104.131.24.82"
server "104.131.24.82", user: "tripl3inf", roles: %w{web app db}
set :deploy_to, "/srv/warvdka"

############################################
# Setup Git
############################################

set :branch, "master"
