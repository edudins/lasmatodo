# lasmatodo

## app description

Update [31-05-2023]: Added my homepage to the repo so I can deploy it.

An app for creating your own todo list. Main features:

- Add new task to be done.
- Shows all future tasks to be done. (Does not show missed or finished tasks)
- Mark task as complete.
- Edit previously created tasks.
- Delete task.

Additionally:

A task, that is *due* in the future, can be archived. In the *Archived* section are archived, missed and done tasks. All tasks in the *Archived* section can be restored (due date is set for next day automatically, which can be changed using the *edit* function).
A task can be completely deleted only in the *Archived* section.

Each task holds the following data:

- Title (required).
- Due date (required).
- Description (optional).
- Date created.

## how to launch the app containerized

- **Docker** and **docker-compose** have to be installed. Information on how to get Docker can be found [here](https://docs.docker.com/get-docker/). Versions used during development are:
  - **Docker**: 23.0.6,
  - **docker-compose**: 2.5.5
- The file `lasmatodo/docker/entrypoint.sh` needs to have `run` privileges.
  - from project root use command: `chmod +x docker/entrypoint.sh`
- An `.env` file has to be created in project root and contents of `.env.example` copied over. (If no `.env` file is present, `entrypoint.sh` will do it automatically)
- `DB_USERNAME` and `DB_PASSWORD` can be changed inside `.env` prior to initializing the project.
- To run the app, from project root run the command: `sudo docker-compose up --build -d`
- To make sure both containers are running, run the command `sudo docker-compose ps`. Both containers should be up.
- The app can be accessed via `localhost:8000`.

# local development notes

- To start the `Docker` daemon, call this command: `sudo systemctl start docker`.
- Check running containers using `sudo docker ps`.
- To launch a local `Docker` container with database, use command:
```
docker run --name lasmatodo -e MYSQL_ROOT_PASSWORD=<root-password> -e MYSQL_DATABASE=<database-name> -e MYSQL_USER=<username> -e MYSQL_PASSWORD=<password> -p <host-port>:3306 -v <host-directory>:/var/lib/mysql -d mysql:latest
```
