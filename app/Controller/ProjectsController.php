<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController
{
	public $uses = array
	(
		'Project',
		'Milestone',
		'Task'
	);


/**
 * index method
 *
 * @return void
 */
	public function index()
	{
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());

		/**
		 * List Tasks count by milestone_id
		 */
		$tasks = $this->Task->find('all');
		$milestone_tasks = array();

		foreach ($tasks as $task)
		{
			$milestone_tasks[$task['Task']['milestone_id']] = isset($milestone_tasks[$task['Task']['milestone_id']]) ? $milestone_tasks[$task['Task']['milestone_id']] + 1 : 1;
		}

		$this->set('milestone_tasks', $milestone_tasks);

		/**
		 * List Milestones count by project_id
		 */
		$milestones = $this->Milestone->find('all');
		$project_milestones = array();

		foreach ($milestones as $milestone)
		{
			$project_milestones[$milestone['Milestone']['project_id']] = isset($project_milestones[$milestone['Milestone']['project_id']]) ? $project_milestones[$milestone['Milestone']['project_id']] + 1 : 1;
		}

		$this->set('project_milestones', $project_milestones);

		/**
		 * List Tasks finished count by milestone_id
		 */
		$tasks_finished = $this->Task->find('all', array('conditions' => array('Milestone.status =' => 1)));
		$milestone_tasks_finished = array();

		foreach ($tasks as $task)
		{
			$milestone_tasks_finished[$task['Task']['milestone_id']] = isset($milestone_tasks_finished[$task['Task']['milestone_id']]) ? $milestone_tasks_finished[$task['Task']['milestone_id']] + 1 : 1;
		}

		$this->set('milestone_tasks_finished', $milestone_tasks_finished);

		/**
		 * List Milestones finished count by project_id
		 */
		$milestones_finished = $this->Milestone->find('all', array('conditions' => array('Milestone.status =' => 1)));
		$project_milestones_finished = array();

		foreach ($milestones as $milestone)
		{
			$project_milestones_finished[$milestone['Milestone']['project_id']] = isset($project_milestones_finished[$milestone['Milestone']['project_id']]) ? $project_milestones_finished[$milestone['Milestone']['project_id']] + 1 : 1;
		}

		$this->set('project_milestones_finished', $project_milestones_finished);

	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Project->create();

			$i = 0;

			$_data = $this->request->data;
			$_data['Project']['reference'] = date('2y-m') . $i;
			$_data['Project']['name'] = $_data['Project']['reference'] . ' : ' . $_data['Project']['title'];

			var_dump($_data);
			exit;

			if ($this->Project->save($_data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Project->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('Project deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Project was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
